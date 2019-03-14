<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <div class="menu">
        <div class="button"><a href="index.php">Home</a></div>
        <div class="button active"><a class="active" href="profiel.php">Profiel</a></div>
        <div class="button"><a href="voortgang.php">Voortgang</a></div>
      </div>
      <div class="profile-outer">
        <div class="profile-placeholder">
          <h2 class="profile">Jens</h2>
          <img class="profile profile-picture" alt"profile picture" src="media/profile-placeholder.png" />
        </div>
      </div>
    </header>
    <div class="content">
      <div>
        <h1>Profiel</h1>
      </div>
      <div class="table">
        <table>
          <tbody class="table-left">
            <tr>
              <td>Voornaam</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Achternaam</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Adres</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>E-mail</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Telefoonnr</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Geslacht</td>
              <td> <input type="radio" id="man" name="drone" value="man">
              <label for="man">Man</label><input type="radio" id="vrouw" name="drone" value="vrouw">
              <label for="vrouw">Vrouw</label></td>
            </tr>
            <tr>
              <td>Geboortedatum</td>
              <td><input type="date"></td>
            </tr>
          </tbody>
          <tbody class="table-right">
            <tr>
              <td>Strudentennr</td>
              <td><input type="text"></td>
            </tr>
            <tr>
              <td>Klas</td>
              <td>
                <select name="klas" size="1">
                  <option value="v1a">V1A</option>
                  <option value="v1b">V1B</option>
                  <option value="v1c">V1C</option>
                  <option value="v1d">V1D</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>Studierichting</td>
              <td>
                <input type="radio" id="sie" name="drone" value="sie">
                <label for="sie">SIE</label><br>
                <input type="radio" id="bim" name="drone" value="bim">
                <label for="bim">BIM</label><br>
                <input type="radio" id="aai" name="drone" value="aai">
                <label for="aai">AAI</label><br>
                <input type="radio" id="ti" name="drone" value="ti">
                <label for="ti">TI</label><br>
                <input type="radio" id="sne" name="drone" value="sne">
                <label for="sne">SNE</label>
              </td>
            </tr>
            <tr>
              <td>Profiel foto</td>
              <td><img src="media/profile-placeholder.png" class="table-photo"><br><button>Change pic</button></td>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
