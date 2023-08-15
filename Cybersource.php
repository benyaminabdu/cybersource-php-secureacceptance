<?php 

    define ('HMAC_SHA256', 'sha256');
    define ('PROFILE_ID', 'YOUR_PROFILE_ID_HERE');
    define ('ACCESS_KEY', 'YOUR_Access_KEY_HERE');
    define ('SECRET_KEY', 'YOUR_SECRET_KEY_HERE');


    class Cybersource {
        
        public function sign ($params) {
            return $this->signData($this->buildDataToSign($params), SECRET_KEY);
        }

        function signData($data, $secretKey) {
            return base64_encode(hash_hmac('sha256', $data, $secretKey, true));
        }

        function buildDataToSign($params) {
            $signedFieldNames = explode(",",$params["signed_field_names"]);
            foreach ($signedFieldNames as $field) {
                $dataToSign[] = $field . "=" . $params[$field];
            }
            return $this->commaSeparate($dataToSign);
        }   

        function commaSeparate ($dataToSign) {
            return implode(",",$dataToSign);
        }

    }

?>