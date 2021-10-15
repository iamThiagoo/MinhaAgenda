<?php
    include_once("assets/templates/header.php");
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
                                <button class="delete" onclick="openModal()"><i class="fas fa-times"></i></button>
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
    <div class="modal-container">
        <div class="modal-box">
            <p>Tem certeza que deseja deletar esse contato da sua agenda?</p>
            <div class="options">
                <button class="no-delete" onclick="closeModal()">Cancelar</button>
                <form action="" method="post">
                    <button class="delete-btn" type="submit">Sim, delete</button>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
    include_once("assets/templates/footer.php");
?>