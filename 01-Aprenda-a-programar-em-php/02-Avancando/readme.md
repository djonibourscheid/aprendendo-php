# Avançando com PHP: Arrays, Strings, Função e Web

Avançando e aprendendo mais detalhes do PHP.

## O que foi aprendido durante o curso?

### Aula 1: Trabalhando com arrays

- Estrutura de dados Array.
- Usa-se `[]` ou `array()` para declarar um novo array.
- Para saber quantos elementos um array tem existe a função `count(nomeDaLista)`.

---

### Aula 2: Arrays associativos

- Um array associativo sempre define elementos composto por uma chave e um valor. A associação entre chave e valor é feito com `=>`.
- Em arrays simples, com índice numérico, basta usar [] para adicionar um elemento no final (por exemplo, `$lista[] = 12;`).

---

### Aula 3: Criando funções

- Como criar e utilizar funções no dia-a-dia.
- Uma função pode especificar os tipos na declaração do parâmetro *(a partir da versão 7)*, como também o tipo do retorno.

---

### Aula 4: Interpolação e Require

- Para acessar variáveis dentro de string podemos usar: `"$conta[titular]"` ou `"{$conta['titular']}"`.

- O PHP trabalha com três principais níveis de erro:
  - `E_NOTICE`: ocorre quando o PHP encontra algum problema, mas consegue contorná-lo. Ex: quando procuramos um índice inexistente, o PHP entende que esse índice não existe e devolve um valor nulo (`Null`).  
  - `E_WARNING`: é um aviso de que o PHP não conseguiu realizar alguma instrução, mas continuará a execução do programa.
  - `E_ERROR`: é o PHP informando que ocorreu um problema e não conseguirá continuar com a execução.

- Para incluirmos um arquivo apenas se ele não tiver sido incluído anteriormente, podemos utilizar o `require_once`.

---

### Aula 5: Referências e mais listas

- Passagem do parâmetro por *valor* ou por *referência*. Para usar a passagem de referência basta colocar o caracter `&` na frente da variável no parâmetro da função.
- Função `list(..)` e sua versão no PHP 7+
- Função `unset(..)`.
- Uso do `__DIR__` para pegar o caminho do arquivo e acessar outros arquivos.

---

### Aula 6: Introdução do PHP na Web

- PHP já tem um servidor embutido, rodar o servidor é: `php -S localhost:8080`.
- Introdução de como usar o php junto com o html.

---

## Professor e aluno

Professor | Aluno
:---:     | :---:
<a href="https://github.com/cviniciussdias" target="_blank" rel="noopener noreferrer"><img width="100" height="100" src="https://github.com/cviniciussdias.png" alt="Foto do professor" title="Foto do professor"></a> | <a href="https://github.com/djonibourscheid" target="_blank" rel="noopener noreferrer"><img width="100" height="100" src="https://github.com/djonibourscheid.png" alt="Foto do aluno" title="Foto do aluno"></a>
Vinicius Dias | Djoni Bourscheid
