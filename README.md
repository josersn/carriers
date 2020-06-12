![](https://www.carriers.com.br/site/img/logos/logo.png)

# Processo seletivo Carriers 

## Introdução 

> Projeto desenvolvindo em PHP com framework Laravel, possuindo um sistema de CRUD e relatórios 

## Produção 

* É necessário  conectar ao banco de dados pelo arquivo database.php**
> Diretorio do arquivo config/database.php

## Rodando

**Parte 1**

Link para acessar API :

http://127.0.0.1:8000/api/employees

```
Create - Cria um  funcionário no sistema
Link: http://127.0.0.1:8000/api/employees
```
![Create](https://uploaddeimagens.com.br/images/002/703/515/full/crud.png?1591966270)

```
Index - Lista todos os funcionários no sistema
link: http://127.0.0.1:8000/api/employees/
```
![Index](https://uploaddeimagens.com.br/images/002/703/515/full/crud.png?1591966270)

```
Show - Lista um funcionário só 
link: http://127.0.0.1:8000/api/employees/id
```
![Show](https://uploaddeimagens.com.br/images/002/703/515/full/crud.png?1591966270)

```
Update - Atualiza um funcionário
link: http://127.0.0.1:8000/api/employees/id
```
![Update](https://uploaddeimagens.com.br/images/002/703/515/full/crud.png?1591966270)


```
Delete - Deleta um funcionário
link: http://127.0.0.1:8000/api/employees/id
```
![Delete](https://uploaddeimagens.com.br/images/002/703/515/full/crud.png?1591966270)



**Parte 2**

Relatório de funcianários.
Link: http://127.0.0.1:8000/api/report/
a resposta é os dados sãolimpo para ser modificado no front-end

![](https://uploaddeimagens.com.br/images/002/703/570/full/report.png?1591969485)


## Post scriptum

* Arquivo .ENV não foi utilizado, pois estava com problemas para rodar a função env()
* Verficações Não foram feita, mas pode ser adicionado
