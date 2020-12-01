<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="adminDashboard.css">
     <style>
          #list {
               font-family: Arial, Helvetica, sans-serif;
               border-collapse: collapse;
               width: 100%;
          }

          #list td,
          #list th {
               border: 1px solid #ddd;
               padding: 8px;
          }

          #list tr:nth-child(even) {
               background-color: #f2f2f2;
          }

          #list tr:hover {
               background-color: #ddd;
          }

          #list th {
               padding-top: 12px;
               padding-bottom: 12px;
               text-align: left;
               background-color: dodgerblue;
               color: white;
          }
     </style>
</head>

<body>
     <?php
     include 'header_admin.html';
     include 'sidebar_admin.html';
     ?>

     <div class="main">
          <form>
               <br>
               <table id="list">
                    <tr>
                         <th>ID</th>
                         <th>Username</th>
                         <th>Name</th>
                         <th>Password</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Address</th>
                         <th>City</th>
                         <th>Counry</th>

                         <th>DOB</th>
                         <th>Image</th>
                    </tr>

                    <tr>
                         <td>1</td>
                         <td>nafis</td>
                         <td>nafisur Rahman</td>
                         <td>1234</td>
                         <td>nfa@gmail.com</td>
                         <td>012345678902</td>
                         <td>khilgaon</td>
                         <td>Dhaka</td>
                         <td>Bangladesh</td>
                         <td>12-03-99</td>
                         <td>null</td>

                         <td><a href="editUser.php">Edit</a></td>
                         <td><a href="deleteUser.php">Delete</a></td>

                    </tr>
                    <tr>
                         <td>1</td>
                         <td>nafis</td>
                         <td>nafisur Rahman</td>
                         <td>1234</td>
                         <td>nfa@gmail.com</td>
                         <td>012345678902</td>
                         <td>khilgaon</td>
                         <td>Dhaka</td>
                         <td>Bangladesh</td>
                         <td>12-03-99</td>
                         <td>null</td>

                         <td><a href="editUser.php?name=<?php echo $User['Name'] ?>">Edit</a></td>
                         <td><a href="deleteUser.php?name=<?php echo $User['Name'] ?>">Delete</a></td>

                    </tr>
                    <tr>
                         <td>1</td>
                         <td>nafis</td>
                         <td>nafisur Rahman</td>
                         <td>1234</td>
                         <td>nfa@gmail.com</td>
                         <td>012345678902</td>
                         <td>khilgaon</td>
                         <td>Dhaka</td>
                         <td>Bangladesh</td>
                         <td>12-03-99</td>
                         <td>null</td>

                         <td><a href="editUser.php?name=<?php echo $User['Name'] ?>">Edit</a></td>
                         <td><a href="deleteUser.php?name=<?php echo $User['Name'] ?>">Delete</a></td>

                    </tr>
                    <tr>
                         <td>1</td>
                         <td>nafis</td>
                         <td>nafisur Rahman</td>
                         <td>1234</td>
                         <td>nfa@gmail.com</td>
                         <td>012345678902</td>
                         <td>khilgaon</td>
                         <td>Dhaka</td>
                         <td>Bangladesh</td>
                         <td>12-03-99</td>
                         <td>null</td>

                         <td><a href="editUser.php?name=<?php echo $User['Name'] ?>">Edit</a></td>
                         <td><a href="deleteUser.php?name=<?php echo $User['Name'] ?>">Delete</a></td>

                    </tr>
                    <tr>
                         <td>1</td>
                         <td>nafis</td>
                         <td>nafisur Rahman</td>
                         <td>1234</td>
                         <td>nfa@gmail.com</td>
                         <td>012345678902</td>
                         <td>khilgaon</td>
                         <td>Dhaka</td>
                         <td>Bangladesh</td>
                         <td>12-03-99</td>
                         <td>null</td>

                         <td><a href="editUser.php?name=<?php echo $User['Name'] ?>">Edit</a></td>
                         <td><a href="deleteUser.php?name=<?php echo $User['Name'] ?>">Delete</a></td>

                    </tr>
                    <tr>
                         <td>1</td>
                         <td>nafis</td>
                         <td>nafisur Rahman</td>
                         <td>1234</td>
                         <td>nfa@gmail.com</td>
                         <td>012345678902</td>
                         <td>khilgaon</td>
                         <td>Dhaka</td>
                         <td>Bangladesh</td>
                         <td>12-03-99</td>
                         <td>null</td>

                         <td><a href="editUser.php?name=<?php echo $User['Name'] ?>">Edit</a></td>
                         <td><a href="deleteUser.php?name=<?php echo $User['Name'] ?>">Delete</a></td>

                    </tr>
                    <tr>
                         <td>1</td>
                         <td>nafis</td>
                         <td>nafisur Rahman</td>
                         <td>1234</td>
                         <td>nfa@gmail.com</td>
                         <td>012345678902</td>
                         <td>khilgaon</td>
                         <td>Dhaka</td>
                         <td>Bangladesh</td>
                         <td>12-03-99</td>
                         <td>null</td>

                         <td><a href="editUser.php?name=<?php echo $User['Name'] ?>">Edit</a></td>
                         <td><a href="deleteUser.php?name=<?php echo $User['Name'] ?>">Delete</a></td>

                    </tr>
                    <tr>
                         <td>1</td>
                         <td>nafis</td>
                         <td>nafisur Rahman</td>
                         <td>1234</td>
                         <td>nfa@gmail.com</td>
                         <td>012345678902</td>
                         <td>khilgaon</td>
                         <td>Dhaka</td>
                         <td>Bangladesh</td>
                         <td>12-03-99</td>
                         <td>null</td>

                         <td><a href="editUser.php?name=<?php echo $User['Name'] ?>">Edit</a></td>
                         <td><a href="deleteUser.php?name=<?php echo $User['Name'] ?>">Delete</a></td>

                    </tr>

               </table>
          </form>
     </div>
     <?php
     include '../footer.php';
     ?>
</body>

</html>