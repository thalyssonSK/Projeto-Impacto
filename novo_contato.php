<h1 class= titulo>Adicionar Contato</h1>

    <form action= "novo_contatoPHP.php"  method="POST">
    <label for="nome">Nome</label>
    <input name="nome" value= "" required type="text" maxlength="70">
  

    <label for="telefone">Telefone</label>
    <input name="telefone" value= ""  type="number" maxlength="12">

    <label for="idade">Idade</label>
    <input name="idade" value= "" required type="number" maxlength="3">

    <label for="dataNascimento">Data de Nascimento</label>
    <input name="dataNascimento" value= "" required type="date">

    <label for="email">Email</label>
    <input name="email" value= ""  type="email" maxlength="70">
    <p class= espaco></p>
    <input value="Salvar" name="salvar" type="submit">
    </form>
</form>