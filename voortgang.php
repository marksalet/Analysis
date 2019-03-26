<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Vooruitgang</title>
    <link type="text/css" rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <div class="menu">
        <div class="button"><a href="index.php">Home</a></div>
        <div class="button"><a href="profiel.php">Profiel</a></div>
        <div class="button active"><a class="active" href="voortgang.php">Voortgang</a></div>
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
        <h1>Vooruitgang</h1>
      </div>
      <div>
        <div class="table-left">
          <table>
            <tr>
              <th>Vakcode</th>
              <th>ECTS</th>
              <th>Datum behaald</th>
            </tr>
            <tr>
              <td>TICT-V1LES-NR</td>
              <td><input type="number" id="v1" value="0"></td>
              <td><input type="date"></td>
            <tr>
            <tr>
              <td>TICT-V1LES-NR</td>
              <td><input type="number" id="v2" value="0"></td>
              <td><input type="date"></td>
            <tr>
            <tr>
              <td>TICT-V1LES-NR</td>
              <td><input type="number" id="v3" value="0"></td>
              <td><input type="date"></td>
            <tr>
            <tr>
              <td>TICT-V1LES-NR</td>
              <td><input type="number" id="v4" value="0"></td>
              <td><input type="date"></td>
            <tr>
              <tr>
                <td>TICT-V1LES-NR</td>
                <td><input type="number" id="v5" value="0"></td>
                <td><input type="date"></td>
              <tr>
              <tr>
                <td>TICT-V1LES-NR</td>
                <td><input type="number" id="v6" value="0"></td>
                <td><input type="date"></td>
              <tr>
              <tr>
                <td>TICT-V1LES-NR</td>
                <td><input type="number" id="v7" value="0"></td>
                <td><input type="date"></td>
              <tr>
              <tr>
                <td>TICT-V1LES-NR</td>
                <td><input type="number" id="v8" value="0"></td>
                <td><input type="date"></td>
              <tr>
                <tr>
                  <td>TICT-V1LES-NR</td>
                  <td><input type="number" id="v9" value="0"></td>
                  <td><input type="date"></td>
                <tr>
                <tr>
                  <td>TICT-V1LES-NR</td>
                  <td><input type="number" id="v10" value="0"></td>
                  <td><input type="date"></td>
                <tr>
                <tr>
                  <td>TICT-V1LES-NR</td>
                  <td><input type="number" id="v11" value="0"></td>
                  <td><input type="date"></td>
                <tr>
                <tr>
                  <td>TICT-V1LES-NR</td>
                  <td><input type="number" id="v12" value="0"></td>
                  <td><input type="date"></td>
                <tr>
                <tr>
                  <td><button onclick="calculateScore()">Calculate</button></td>
                </tr>
          </table>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
