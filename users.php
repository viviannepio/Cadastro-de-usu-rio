<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
    <link rel="stylesheet" href="./estilo.css" />
  </head>
  <body>
<h1>YOURMUSIC</h1>
<h1>Usuários</h1>
    <main>
      <?php
        $banco = new PDO("mysql:host=localhost;dbname=yourmusic", "root", "");
        $yourmusic_users = $banco->query("SELECT * FROM yourmusic_users;");
        if ($yourmusic_users != NULL) { ?>
        <table>
          <thead>
            <tr>
              <th>id</th>
              <th>Nome</th>
              <th>Usuario</th>
              <th>E-mail</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($linha = $yourmusic_users->fetch(PDO::FETCH_ASSOC)) { ?>
              <tr>
                <td><?php echo $linha["id"] ?></td>
                <td><?php echo $linha["name"] ?></td>
                <td><?php echo $linha["user"] ?></td>
                <td><?php echo $linha["email"] ?></td>
              </tr>
              <?php
            }?>
          </tbody>
        </table>
      <?php } else { ?>
      <p>Não tem usuário nenhum cadastrado.</p>
      <?php } ?>
    </main>
  </body>
</html>