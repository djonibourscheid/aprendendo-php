# PHP I/O: trabalhando com arquivos e streams

Aprendendo como manipular arquivos locais e em rede e manipular o teclado.  

## O que foi aprendido durante o curso?

### Aula 1: Pilha de execução

- Como funciona a execução de um programa PHP
- O que é a *call stack*, ou *pilha de execução*
- O conceito de *depuração*

---

### Aula 2: Tratamento de exceções

- Que problemas podem acontecer durante o desenvolvimento
- Como o PHP reporta o acontecimento destes problemas através de exceções
- A tratar possíveis erros, utilizando `try - catch`
- A tratar mais de uma exceção por vez, utilizando o *multi-catch*, com o operador `|`

---

### Aula 3: Lançando exceções

- Exceção é uma classe, podemos instanciar exceções
- A utilizar a palavra `throw`, para lançar uma exceção em nosso código

---

### Aula 4: Conhecendo exceções

- A hierarquia de exceções e erros no PHP
- A diferença entre exceções (`Exception`) e erros (`Error`), analisando essa hierarquia
- Como capturar exceções e erros de forma mais genérica, através do conhecimento dessa hierarquia
- Como criar a nossa própria exceção, estendendo de alguma classe de exceção já existente

---

### Aula 5: Aplicando o conhecimento

- Aplicando o conhecimento em um projeto prático
- Quando faz sentido lançar uma exceção já existente ou uma exceção criada por nós
- A personalizar uma exceção e sobrescrever o construtor em nossa própria exceção

---

### Aula 6: Finally e peculiaridades do PHP

- A utilizar o `finally`
- Que nem sempre ele é útil, e às vezes podemos simplesmente colocar o código fora do `try - catch`
- Como o PHP tratava os erros antes da versão 7
- Os principais tipos de erros do PHP:
  - *Notice*
  - *Warning*
  - *Error (erro fatal)*
- Configurações relacionadas à exibição e *log* de erros
- A tratar os erros utilizando a função `set_error_handler`
- Ferramentas especializadas em tratar erros cuidam dessa parte para nós

---

## Professor e aluno

Professor | Aluno
:---:     | :---:
<a href="https://github.com/cviniciussdias" target="_blank" rel="noopener noreferrer"><img width="100" height="100" src="https://github.com/cviniciussdias.png" alt="Foto do professor" title="Foto do professor"></a> | <a href="https://github.com/djonibourscheid" target="_blank" rel="noopener noreferrer"><img width="100" height="100" src="https://github.com/djonibourscheid.png" alt="Foto do aluno" title="Foto do aluno"></a>
Vinicius Dias | Djoni Bourscheid
