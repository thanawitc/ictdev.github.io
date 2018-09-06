<html>
<head>
<title>Request Tooling</title>
</head>
<body>
<form name="login" method="post" action="check_login.php" target="main">
  Login<br>
<br>
  <table border="1" style="width: 80px">
    <tbody>

      <tr>
        <td> &nbsp;EN Admin</td>
        <td>
          <input name="txtUsername" type="text" id="txtUsername" size="10">
        </td>
      </tr>

      <tr>
        <td> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword" size="10">
        </td>
      </tr>

      <tr>
	          <td> &nbsp;EN(borrower)</td>
	          <td><input name="txtENb" type="text" id="txtENb" size="10">
	          </td>
      </tr>

    </tbody>
  </table>
  <br>
  <input type="submit" name="Submit" value="Login">

</form>
<br>
<br>
<a href='register.php?' target="main">Register user </a>
<br>
<br>
<a href='register_tool.php?' target="main">Register Tooling </a>
<br>
<br>
<a href='edit_register.php?' target="main">Edit user </a>
<br>
<br>
<a href='edit_register_tool.php?' target="main">Edit Tooling </a>
<br>
<br>
<a href='edit_admin.php?' target="main">Change Password </a>
<br>
<br>
<a href='show_borrow.php?' target="footer">Show borrowing All </a>
</body>
</html>