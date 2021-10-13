<?php
    include_once("assets/templates/header.php");
    include_once("assets/config/contacts.php");
?>
<main>
    <div class="main-content">
        <?php if(isset($msg) && $msg != ""): ?>
            <p id="msg"><?= $msg ?></p>
        <?php endif; ?>
        <?php if(count($contacts) > 0): ?>
            <h2>Meus contatos</h2>
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</td>
                        <th scope="col">Nome</td>
                        <th scope="col">Telefone</td>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($contacts as $contact): ?>
                        <tr>
                            <td scope="row"><?= $contact["id"] ?></td>
                            <td scope="row"><?= $contact["name"] ?></td>
                            <td scope="row"><?= $contact["phone"] ?></td>
                            <td class="actions">
                                <a href="#" class="eye"><i class="fas fa-eye"></i></a>
                                <a href="#" class="edit"><i class="fas fa-edit"></i></a>
                                <a href="#" class="delete"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <div class="no-contacts">
                <p>Ainda não há contato em sua agenda!</p>
                <a href="#">Comece adicionando aqui</a>
            </div>
        <?php endif; ?>
    </div>
</main>
<?php
    include_once("assets/templates/footer.php");
?>