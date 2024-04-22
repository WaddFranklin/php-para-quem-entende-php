<h2>Contato</h2>
<?= get('message'); ?>

<form action="/pages/forms/contato.php" method="POST">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" value="Franklin Nascimento" name="name" id="name" placeholder="Digite seu nome...">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" value="" name="email" id="email" placeholder="Digite seu email...">
    </div>

    <div class="form-group">
        <label for="subject">Assunto</label>
        <input type="text" class="form-control" value="" name="subject" id="subject" placeholder="Digite seu assunto...">
    </div>

    <div class="form-group">
        <label for="message">Mensagem</label>
        <textarea name="message" class="form-control" id="message" cols="30" rows="10">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, velit rem excepturi laboriosam ab totam? Ad similique impedit adipisci dolor ea quam nam doloremque quas unde obcaecati inventore, voluptas deleniti!
        </textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Enviar">
</form>