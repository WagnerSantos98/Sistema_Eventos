# Sistema de Eventos

 - Cadastro de eventos
 - Acesso de ADM - Nível de acesso
 - Import de alunos cadastrado no evento
 - Leitura de RA
 - Geração de certificados - exportação dos dados .CSV
 - Backend - PHP


### Página inicial

Neste guia irá conter uma página de apresentação dos principais eventos, de acordo com o grau de relevância.
Também criar uma galeria dos eventos importantes e notificar o prazo de inscrição aos alunos.


### Eventos

Nesta página irá conter a listagem dos eventos que terá durante todo o mesmo e que foi inserido pela equipe do NEXT.
Cada item dessa seção tem um botão para efetuar a inscrição do mesmo.

### Login

Interface simples com nível de acesso a página onde irão inserir os eventos e ver a quantidade de ingressante, gerar relatório de eventos, contabilizando quantidade de participantes, cursos, e por período.


### Processo de inscrição
O aluno seleciona o evento que deseja participar e se inscreve através de um pequeno formulário solicitando ra e preenchendo automaticamente o nome do aluno, para assim não ter erros no processo de validação de horas e criação do certificado.
Envio de confirmação de inscrição ao email, por meio de uma api que encaminhará.
Além disso o prazo de inscrição se iniciará e finalizará com forme o previsto e criado pelos organizadores.

