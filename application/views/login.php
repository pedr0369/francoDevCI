<?php $this->load->view('template/header'); ?>
<?php $this->load->view('template/nav'); ?>

<div class="col-md-4 content col-md-offset-4" style="margin-bottom: 80px; margin-top: 80px;">
    
    <div ng-if="msg != ''">
        <div class="alert alert-danger"><span ng-bind="msg"></span></div>
    </div>
    
    <h4 class="text-center">Entrar como editor</h4>
    
    <form action="Login/loga" method="post" onsubmit="return formulario()" name="logar">
        <div class="form-group">
            <label for="email">Usuario: </label>
            <input type="email" class="form-control" placeholder="Insira seu usuario" name="email" required>
        </div>
    
        <div class="form-group">
            <label for="password">Senha: </label>
            <input type="password" class="form-control" name="password" placeholder="Insira sua senha" required>
        </div>
        
        <div class="form-group col-sm-8 col-sm-offset-2">
            <input type="submit" value="Logar" class="btn btn-block" id="botao_mais">
        </div>
        
    </form>
</div>

<?php $this->load->view('template/footer'); ?>