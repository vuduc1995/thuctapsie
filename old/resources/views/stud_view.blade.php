<html>
   <script type="text/javascript"> 
   function test () {
      alert("haa");
   }

    </script>   
   <head>
      <title>View Student Records</title>
   </head>
   
   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->idSinhVien }}</td>
            <td>{{ $user->email }}</td>
         </tr>
         @endforeach
      </table>
      <div>
         <button onclick="test()">Click me pls!</button>
      </div>
   </body>
</html>