<div class="table-header">
    <form role="form" class="form-inline form-table-search" method="post" action="<?php echo $action;?>">
        <a type="button" class="btn btn-success" data-toggle="modal" data-target="#dynamicModal" href="<?php echo site_url("users/add")?>">
           <span class="glyphicon glyphicon-plus"></span> Usuário</a>
            
        <div class="form-group">
            <div class="input-group">
                <input name="term" type="search" class="form-control" id="inputUsuario" placeholder="Nome">
                <a href="#" class="input-group-addon"><span class="glyphicon glyphicon-search"></span></a>
            </div>
        </div>
    </form>
</div>
<table class="table table-hover">
    <thead>
        <tr>
            <th class="las-collum"></th>
            <th>Nome</th>
            <th>Login</th>
            <!--..<th>Acesso</th><!--...-->
            <th>Nível</th>
        </tr>
    </thead>
        <?php  include('tbodys/users.php')?>
</table>