<?php

namespace App\Class;

class Client {
    private string $url;/**
 * Client constructor.
 * @param string $url
 */public function __construct ($url)
   {
    $this->url = $url;
   }

    public function registration($login, $password)
    {
        $data = json_encode(['login' => $login,
                             'password' => $password],
                             JSON_UNESCAPED_UNICODE);
        
        $request = curl_init();
        
        $arr = array(CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $this->baseURL.'/user',
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length: '.strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data);

        curl_setopt_array($request, $arr);
        
        try
        {
            $data = curl_exec($request);
            $result = curl_getinfo($request, CURLINFO_RESPONSE_CODE);
        }
        finally
        {
            curl_close($request);
        }
        return $result;

    }

    public function create_todo($login, $todo) 
    {
        $data = json_encode(['login' => $login,
                             'todo'  => $todo],
                             JSON_UNESCAPED_UNICODE);
        $request = curl_init();
        
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $this->url.'/todo',
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length'.strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data );
        
        curl_setopt_array($request, $arr);
        
        try
        {
            $data = curl_exec($request);
            $result = curl_getinfo($request, CURLINFO_RESPONSE_CODE);
        }
        finally 
        {
            curl_close($request);
        }
        return $result;
    }

    public function get_todo($login) 
    {    
        $data = json_encode(['login' => $login],
                             JSON_UNESCAPED_UNICODE);
        
        $request = curl_init();
        
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $this->url.'/todo',
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length'.strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => $data);
        
        curl_setopt_array($request, $arr);
        
        try
        {
            $data = curl_exec($request);
            $result = curl_getinfo($request, CURLINFO_RESPONSE_CODE);
        }
        finally 
        {
            curl_close($request);
        }
        return $result;
    }

    public function put_todo($id, $login, $todo) 
    {
        $data = json_encode(['id' => $id,
                             'login' => $login,
                             'todo' => $todo],
                             JSON_UNESCAPED_UNICODE);
        
        $request = curl_init();
        
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $this->url.'/todo'.$id,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length'.strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $data);
        
        curl_setopt_array($request, $arr);
        
        try
        {
            $data = curl_exec($request);
            $result = curl_getinfo($request, CURLINFO_RESPONSE_CODE);
        }
        finally 
        {
            curl_close($request);
        }
        return $result;
    }

    public function delete_todo($id, $login, $todo) 
    {
         $data = json_encode(['id' => $id,
                             'login' => $login,
                             'todo' => $todo],
                              JSON_UNESCAPED_UNICODE);
        
        $request = curl_init();
        
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $this->url.'/todo'.$id,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length'.strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_POSTFIELDS => $data );
        
        curl_setopt_array($request, $arr);
        
        try
        {
            $data = curl_exec($request);
            $result = curl_getinfo($request, CURLINFO_RESPONSE_CODE);
        }
        finally
        {
            curl_close($request);
        }
        return $result;
    }

}

