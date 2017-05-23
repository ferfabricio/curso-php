# Curso PHP

## Estrutura de diretórios

```
app/ -> Aplicação
vhost/ -> Virtual host adicionado ao Nginx
docker-compose.yml -> Arquivo de configuração do docker utilizado
```

## Aplicação

Existe um Makefile configurado para executar os comandos necessários para rodar aplicação.

```
make test -> executa os testes unitários
make update -> instala pacotes do composer necessários
```

## Rodando servidor web

```
docker-compose up
```
