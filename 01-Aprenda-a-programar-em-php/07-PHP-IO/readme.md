# PHP I/O: trabalhando com arquivos e streams

Aprendendo como manipular arquivos locais e em rede e manipular o teclado.  

## O que foi aprendido durante o curso?

### Aula 1: Lendo arquivos

- Como abrir um arquivo com `fopen`.
- Como fechar um arquivo com `fclose`.
- Como ler uma linha com `fgets` ou `fread`.
- Como ler todo o conteúdo com `file_get_contents` ou `file`.

---

### Aula 2: Escrevendo em arquivos

- Como escrever em um arquivo com `fwrite`.
- Os vários modos de abertura de um arquivo em PHP na documentação do `fopen()`.
- A utilizar a função `file_put_contents` junto com a flag `FILE_APPEND`, para escrever no final de um arquivo.

---

### Aula 3: Wrappers e filtros

- Que o PHP trabalha com vários protocolos (através de wrappers) de streams.
- Como fazer uma requisição HTTP com o PHP, utilizando `file_get_contents` (mas também poderia ser com `fread`, por exemplo).
- Como abrir e ler um arquivo ZIP.
- Como utilizar filtros com a função `stream_filter_append`.
- Como criar filtros próprios, estendendo a classe `php_user_filter`.

---

### Aula 4: Trabalhando no console

- Ler dados do teclado ao utilizar o stream `STDIN`.
- Escrever na tela como se o console fosse um arquivo, utilizando o `STDOUT` e `STDERR`.
- Copiar dados diretamente de um stream para outro, com `stream_copy_to_stream`, poupando memória.

---

### Aula 5: Contexto em streams

- É possível adicionar informações à leitura (ou escrita) de streams através de contextos.
- A função responsável para criar contextos é a `stream_context_create`.
- Cada wrapper de stream possui suas possíveis opções de contexto.
- Em `http://`, vimos como definir o método, cabeçalhos e conteúdo da requisição.
- Em `zip://`, nós aprendemos a definir a senha para abrir o arquivo.

---

### Aula 6: Funções específicas

- Como trabalhar com arquivos no formato CSV, utilizando as funções `fputcsv` e `fgetcsv`.
- Como ter acesso aos dados de diretórios, através da função `dir`, que nos retorna uma instância de `Directory`.
- Como tratar streams como objetos, através da classe `SplFileObject`.

---

### Aula 7: Encoding

- O que são conjunto de caracteres (*charsets*).
- Quais são os principais charsets utilizados.
- O que é e porque aderir ao UTF-8.
- Como converter charsets utilizando PHP.

---

## Professor e aluno

Professor | Aluno
:---:     | :---:
<a href="https://github.com/cviniciussdias" target="_blank" rel="noopener noreferrer"><img width="100" height="100" src="https://github.com/cviniciussdias.png" alt="Foto do professor" title="Foto do professor"></a> | <a href="https://github.com/djonibourscheid" target="_blank" rel="noopener noreferrer"><img width="100" height="100" src="https://github.com/djonibourscheid.png" alt="Foto do aluno" title="Foto do aluno"></a>
Vinicius Dias | Djoni Bourscheid
