 <form action="action_page.php">
  <div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label><b>Usuario</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label><b>Contraseña</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Recordar mi usuario
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancelar</button>
    <span class="psw">¿Olvidaste la <a href="#">contraseña?</a></span>
  </div>
</form>