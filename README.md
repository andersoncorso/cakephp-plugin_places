# Plugin "Places" para CakePHP 3x

## Instalação

Você pode instalar este plugin no seu aplicativo CakePHP usando [composer](http://getcomposer.org).

Instalação via composer:

```
composer require andersoncorso/cakephp-plugin_places
```

Ativando o plugin via console:
```
bin/cake plugin load Places
```

Ou você pode ativar manualmente no arquivo `config\bootstrap.php`, inserindo o comando abaixo:
```php
Plugin::load('Places');
```


## Banco de dados

Importe os arquivos de banco de dados localizados em config\Schema:

- **cakephp_plugin-places.sql** para importar todo o banco de dados

OU

se preferir pode importar apenas o desejado:

- **regioes.sql** para importar a estrutura e dados de regiões do Brasil;
- **estados.sql** para importar a estrutura e dados de estados do Brasil;
- **municipios.sql** para importar a estrutura e dados de municípios do Brasil;
