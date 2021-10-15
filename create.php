<?php
    include_once("assets/templates/header.php");
?>
<main class="main-content" id="create-container">
    <h2>Cadastrar contato</h2>
    <form action="assets/config/backend.php" method="POST">
        <div class="input">
            <label class="sr-only" for="name">Digite o nome do contato</label>
            <input type="text" name="name" id="name" maxlength="100" placeholder="Digite o nome do contato" required>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
        </div>
        <div class="input">
            <label class="sr-only" for="phone">Digite o telefone do contato</label>
            <input type="text" name="phone" id="phone" placeholder="Digite o telefone do contato" required>
            <div class="icon">
                <i class="fas fa-phone"></i>
            </div>
        </div>
        <div class="textarea">
            <textarea name="observation" cols="30" rows="10" placeholder="Observações..."></textarea>
        </div>
        <input type="submit" class="submit-btn" value="Salvar contato">
    </form>
</main>
<?php
    include_once("assets/templates/footer.php");
?>