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
                                <a href="#"><i class="fas fa-eye"></i></a>
                                <a href="#"></a>
                                <a href="#"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>Ainda não há contato em sua agenda! <a href="#">Clique aqui para adicionar</a></p>
        <?php endif; ?>
    </div>
</main>
<?php
    include_once("assets/templates/footer.php");
?>