<?php

use Illuminate\Database\Seeder;

class Seeder_000002_00_XAPIKey extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $env = env('APP_ENV', 'undefined');
        $web_origins = [
            'local' => '',
            'development' => 'https://dev.example.com',
            'staging' => 'https://stg.example.com',
            'production' => 'https://example.com',
            'undefined' => 'https://example.com'
        ];
        $pkg_name_suffixs = [
            'local' => '.dev',
            'development' => '.dev',
            'staging' => '.stg',
            'production' => '',
            'undefined' => ''
        ];
        $bundle_id_suffixs = [
            'local' => '.dev',
            'development' => '.dev',
            'staging' => '.stg',
            'production' => '',
            'undefined' => ''
        ];
        
        $items = [
            1 => [
                // 'api_key_id' => '62956b9fbea2365648531dc2d',
                // 'api_key_secret' => 'ZmUzM2M4MGQ2N2IwNmN1c3RvbWVyLi0uLndlYg/MjJmNzU4MDQ/NDlhMzQzOGU5YWQ0/YWY2NjAwZTc5NzM5',
                'domain' => 'customer',
                'app_platform' => 'web',
                'app_identifier' => $web_origins[$env],
                'expiry_time' => '2099-01-01'
            ],
            2 => [
                // 'api_key_id' => 'd9b98d1f4f98411b33de0c764',
                // 'api_key_secret' => 'NjQ2NTM5MmQ2N2IwNmN1c3RvbWVyLi0uLmFuZHJvaWQ/YjVjYWMxM2M/Y2JiOTQwZGFhYzU0/ZDUxZWZlYzZiZWVi',
                'domain' => 'customer',
                'app_platform' => 'android',
                'app_identifier' => 'com.example.app' . $pkg_name_suffixs[$env],
                'expiry_time' => '2099-01-01'
            ],
            3 => [
                // 'api_key_id' => '7cbeede57768f3c8cd569199a',
                // 'api_key_secret' => 'YzRmZjhlNGQ2N2IwNmN1c3RvbWVyLi0uLmlvcw/ZGMzODQ1ODA/M2EzNTQ5ZDlhMmMx/YWI0NTdmMzVjNjRk',
                'domain' => 'customer',
                'app_platform' => 'ios',
                'app_identifier' => 'com.example.app' . $bundle_id_suffixs[$env],
                'expiry_time' => '2099-01-01'
            ]
        ];
        
        foreach ($items as $id => $item) {
            $ak = $this->generateAPIKey($item['domain'], $item['app_platform']);
            $item['api_key_id'] = $ak['id'];
            $item['api_key_secret'] = $ak['secret'];
            DB::table('tb_x_api_key')->updateOrInsert([ 'id' => $id ], $item);
        }
        
        if (env('DB_CONNECTION') == 'pgsql') {
            DB::update('SELECT setval(pg_get_serial_sequence(?, ?), (SELECT max(id) FROM tb_x_api_key))',
                [ 'tb_x_api_key', 'id' ]);
        }
    }
    
    private function generateAPIKey($domain, $platform) {
        $now = uniqid();
        $base = "$domain:$platform@$now";
        $ak_id = substr(md5($base), 0, 25);
        $ak_secret = $this->generateAPIKeySecret($domain, $platform);
        return [
            'id' => $ak_id,
            'secret' => $ak_secret
        ];
    }
    
    private function generateAPIKeySecret($domain, $platform) {
        $uniq = base64_encode(strrev(uniqid()) . ":$domain:$platform");
        $parts = explode('-', $this->generateUUID());
        $parts = [ $parts[0], $parts[1] . $parts[2] . $parts[3], $parts[4] ];
        foreach ($parts as &$p) {
            $p = base64_encode($p);
            $p = str_replace('=', '', $p);
        }
        return str_replace('=', '', $uniq . '/' . implode('/', $parts));
    }
    
    function generateUUID() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),
    
            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,
    
            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,
    
            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }
}
