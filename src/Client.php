<?php

namespace App\Class;

class Client
{
    private string $url;

    /**
     * Client constructor.
     * @param string $url
     */

    public function __construct($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function registration(string $login, string $password)
    {
        $data = json_encode(['login' => $login,
                             'password' => $password],
                        JSON_UNESCAPED_UNICODE);
        $req = curl_init($this->url . '/user');
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length: ' . strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data);

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;
    }

    public function create_todo(string $discription, string $todo_name, int $id)
    {
        $data = json_encode(['discription' => $discription,
                             'todo_name' => $todo_name],
                       JSON_UNESCAPED_UNICODE);
        $req = curl_init($this->url . '/todo/' . $id);
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length' . strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $data);

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;
    }

    public function get_todo(int $id)
    {
        $data = json_encode(['id' => $id],
                       JSON_UNESCAPED_UNICODE);
        $req = curl_init($this->url . '/todo/' . $id);
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length' . strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_POSTFIELDS => $data);

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;
    }

    public function put_todo(int $id, string $discription, string $todo_name)
    {
        $data = json_encode(['discription' => $discription,
                             'todo_name' => $todo_name],
                       JSON_UNESCAPED_UNICODE);
        $req = curl_init($this->url . '/todo/' . $id);
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length' . strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => $data);

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;
    }

    public function delete_todo(int $id)
    {
        $data = json_encode(['id' => $id],
                      JSON_UNESCAPED_UNICODE);
        $req = curl_init($this->url . '/todo/' . $id);
        $arr = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                'Content-type: application/json',
                'Content-Length' . strlen($data)),
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_POSTFIELDS => $data);

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;
    }
//file

    public function add_file(string $file)
    {
        $req = curl_init($this->url . '/files/add');
        $arr = array(CURLOPT_RETURNTRANSFER=>true,
                     CURLOPT_CUSTOMREQUEST=>'POST',
                     CURLOPT_POSTFIELDS => array('file' => new CurlFile($file)));

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;
    }

    public function delete_file( string $f_name)
    {
        $req = curl_init($this->url . '/files/' . $f_name);
        $arr = array(CURLOPT_RETURNTRANSFER=>true,
                     CURLOPT_CUSTOMREQUEST=>'DELETE');

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;
    }

    public function get_files()
    {
        $req = curl_init($this->url . '/files/get_files');
        $arr = array(CURLOPT_RETURNTRANSFER=>true,
                     CURLOPT_CUSTOMREQUEST=>'GET');

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;
    }

    public function download_file($f_name)
    {
        $req = curl_init($this->url . '/files/' . $f_name);
        $arr = array(CURLOPT_RETURNTRANSFER=>true,
                     CURLOPT_CUSTOMREQUEST=>'GET');

        curl_setopt_array($req, $arr);
        $response = curl_exec($req);

        curl_close($req);

        return $response;

    }

}



