# Sistema de Eventos


### Processos a serem feitos
 - Cadastro de eventos
 - Acesso de ADM - Nível de acesso
 - Import de alunos cadastrado no evento
 - Leitura de RA
 - Geração de certificados - exportação dos dados .CSV
 - Backend - PHP
 - Criação de logo ou criação de arte para divulgação
 - Criação da interface no Figma e exportação do projeto
 - Elaborar escopo do projeto e banco de dados a ser trabalhado
 - Criar cronograma de projeto, etapas a serem realizadas
 - Estruturação do banco de dados MySQL



### Página inicial

Neste guia irá conter uma página de apresentação dos principais eventos, de acordo com o grau de relevância.
Também criar uma galeria dos eventos importantes e notificar o prazo de inscrição aos alunos.


### Eventos

Nesta página irá conter a listagem dos eventos que terá durante todo o mesmo e que foi inserido pela equipe do NEXT.
Cada item dessa seção tem um botão para efetuar a inscrição do mesmo.

### Cadastro de Eventos
    - [Imagem do evento]
    - [Nome do evento]
    - [Descrição da forma que será realizado o evento]
    - [Data]
    - [Local]
    - [Sobre o eveto] - pequeno texto informando sobre o evento
    - [Botão de participação] - com uma div oculta e exibir quando clicar | Efetuar inscrição > confirmação de inscrição por email | Link de transmissão caso seja no meet > forma automática e gerar o link através do cadastro do evento sincronizado com o google calendário

### Inscrição
    - [RA] - disabled
    - [Nome completo]
    - [Curso]
    - [Email]

    Tipo de público
        Select [Alunos USF, Ex-Aluno USF, Docente USF, Público Externo] - condição: se for aluno usf habilitar o RA | Select no inicio do form.

    Resumo de inscrição - mostrando as informações anteriores preenchidas e com botão de confirmação da inscrição.

### Acomapnhamento de Eventos
    Interface de acesso se for aluno logar com RA e senha do USF Connect, dentro da plataforma conter a lista de cursos que já participou e os diplomas constando suas presenças 
    Se for outro tipo de público utilizar o nº de inscrição e gerar uma senha aleatória para visualizar sua inscrição.

### Login

Interface simples com nível de acesso a página onde irão inserir os eventos e ver a quantidade de ingressante, gerar relatório de eventos, contabilizando quantidade de participantes, cursos, e por período.

### Processo de inscrição
O aluno seleciona o evento que deseja participar e se inscreve através de um pequeno formulário solicitando ra e preenchendo automaticamente o nome do aluno, para assim não ter erros no processo de validação de horas e criação do certificado.
Envio de confirmação de inscrição ao email, por meio de uma api que encaminhará.
Além disso o prazo de inscrição se iniciará e finalizará com forme o previsto e criado pelos organizadores.

### Sobre
Crédito aos criadores e inspiração do projeto.

### Pasta ADM - Acesso ao sistema
 - Nível de acesso (ADM, Padrão)
Acessando como ADM terá a possibilidade de adicionar o evento, ver a lista completa de inscritose gerar relatório do mesmo.
Acessando como Padrão será possível somente conferir a quantidade de inscritos.

### Banco de Dados
Criar a relação das tabelas, principalmente nos eventos e alunos.
Definir os níveis de acesso.
 - tb_usuarios - Administradores (criam eventos, cadastram usuários e verifica a lista de inscrição)
 - tb_eventos - Listagem de eventos 
 - tb_alunos - Listagem dos alunos inscritos
