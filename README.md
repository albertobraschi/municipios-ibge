# Municípios IBGE

### v0.1.0

Retorna o código IBGE de 7 dígitos para um dado município

![webp net-gifmaker](https://user-images.githubusercontent.com/7466894/28582648-914ff8a8-713c-11e7-9a43-833d2969d5a2.gif)


## Instale
`composer require reginaldojunior/municipios-ibge`

## Use
```PHP
$MunicipiosIBGE = new MunicipiosIBGE\Municipios;

// Retorna '3536505'
$municipio = new Normalize('Paulínia');
$estado = new Normalize('São Paulo');
$ibge = Municipios($municipio, $estado);
echo $ibge->getCodeIBGE();
```

## Normalização
A busca não leva em conta acentos, espaços nem maiúscula/minúscula, ou seja, `ibge('sao-paulo', 'paulinia')` também funcionaria, sempre passe como parametro a classe normalize

## Documentação

### MunicipiosIBGE\Municipios(MunicipiosIBGE/Normalize municipio, MunicipiosIBGE/Normalize estado)

Instancia a classe

`estado` é um objeto classe MunicipiosIBGE/Normalize;

`municipio`  é um objeto classe MunicipiosIBGE/Normalize;

### MunicipiosIBGE\Municipios(MunicipiosIBGE/Normalize municipio, MunicipiosIBGE/Normalize estado)::getCodeIBGE()

Retorna o código de um dado município (string de 7 dígitos) ou string vazia se não encontrar

### MunicipiosIBGE\Normalize(MunicipiosIBGE/Normalize estado)::getNormalizedString()
Remove acentos, coloca tudo em caixa alta e remove outros caracteres

### MunicipiosIBGE\State(MunicipiosIBGE/Normalize estado)::exist()
Verificar se o estado passado existe

### MunicipiosIBGE\State(MunicipiosIBGE/Normalize estado)::getCodeStateByName()
Pega o UF do estado a partir do nome passado na instanciação da classe
