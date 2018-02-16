<!DOCTYPE html>
<html ng-app="tarefas">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha Lista de tarefas</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="container" ng-controller="TarefasController as tarefas">
  <div class="page-header">
    <h2 class="text-center">Minha lista de tarefas</h2>
  </div>
  <div class="row">
    <form ng-submit="adicionarTarefa()">
      <label for="texto">Tarefa</label>
      <input id="texto" type="text" ng-model="texto" required placeholder="Texto" class="form-control"/>
      <label for="autor">Autor</label>
      <input id="autor" type="text" ng-model="autor" required placeholder="Autor" class="form-control"/>
      <label for="status">Status</label>
      <select id="status" ng-model="status" required class="form-control">
        <option value="Concluído">Concluído</option>
        <option value="Pendente">Pendente</option>
      </select>
      <br>
      <input type="submit" value="Cadastrar" class="btn btn-success"/>
    </form>
  </div>
  <br>
  <div class="row">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Id</th>
          <th>Tarefa</th>
          <th>Autor</th>
          <th>Status</th>
          <th>Alterar</th>
          <th class="text-center">Remover</th>
        </tr>
      </thead>
      <tbody>
        <tr ng-repeat="tarefa in dadostarefas">
          <td>{{tarefa.id}}</td>
          <td>{{tarefa.texto}}</td>
          <td>{{tarefa.autor}}</td>
          <td>{{tarefa.status}}</td>
          <td width='10%'>
            <span ng-if="tarefa.status == 'Concluído'">
              <input type="button" value="Marcar como Pendente" class="btn btn-success" ng-click="mudarStatus(tarefa.id,'Pendente')" />
            </span>
            <span ng-if="tarefa.status != 'Concluído'">
              <input type="button" value="Marcar como Concluído" class="btn btn-warning" ng-click="mudarStatus(tarefa.id,'Concluído')" />
            </span>
          </td>
          <td class="text-center">
            <a href=""><span ng-click="excluirTarefa(tarefa.id)" class="btn btn-danger glyphicon glyphicon-trash" aria-hidden="true"></span></a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.32/angular.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
