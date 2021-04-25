<!DOCTYPE html>
<html>
<head>
 <title>Aku Suka Coding</title>
</head>
<body>
 <table border="1">
  <thead>
   <tr>
    <th>NIM</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Jurusan</th>
   </tr>
  </thead>
  <tbody>
  <?php
   $req="http://localhost/Zulfikar/data.xml";
   $temp=file_get_contents($req);
   $xml=simplexml_load_string($temp);
    
   foreach($xml as $data)
    {
   ?>
      <tr>
       <td><?=$data->nim?></td>
    <td><?=$data->nama?></td>
    <td><?=$data->alamat?></td>
    <td><?=$data->jurusan?></td>
   </tr>  
   <?php
    }
   ?>
  </tbody>
 </table>
</body>
</html>