# Avançando com Orientação a Objetos com PHP: Herança, Polimorfismo e Interfaces

Avançando em Programação Orientada a Objetos com PHP, aprendendo sobre Polimorfismo e Interfaces.  

## O que foi aprendido durante o curso?

### Aula 1: Herança

- O que é **herança**.
- Como a herança pode auxiliar com duplicação de código.
- Para acessar um membro da classe mãe, utilizamos `parent`.
- Modificador de acesso `protected`.

---

### Aula 2: Namespace e Autoload

- Separar classes em *namespaces*, assim como separamos arquivos em pastas.
- Separando as classes em namespaces podemos ter classes com o mesmo nome em namespaces diferentes.
- Utilizando um namespace raiz (chamado de *vendor namespace* em algumas literaturas) podemos evitar conflitos com classes de pacotes externos.
- Para utilizar uma classe precisamos importá-la utilizando `use` ou informar seu nome completo (com namespace) em todos os locais onde ela for utilizada.
- Através de um autoloader com o PHP (`spl_autoload_register`) podemos evitar ficar utilizando `require` para incluir todos os arquivos necessários para executar o programa.

---

### Aula 3: Classes e métodos abstratos

- Entendemos que podemos ter classes que ainda não estão prontas para serem instanciadas e precisam ser estendidas (classes abstratas);
- Conhecemos também os métodos abstratos, que são uma forma de "obrigar" que classes filhas implementem determinado método;
- Vimos que apenas classes abstratas podem ter métodos abstratos;

---

### Aula 4: Polimorfismos

- Aprendemos os 4 pilares da orientação a objetos:
  1. **Abstração**
  2. **Encapsulamento**
  3. **Herança**
  4. **Polimorfismo**
- Vimos que a mesma referência pode se comportar de diversas formas dependendo do contexto.
- Reforçamos nosso conhecimento sobre herança criando diversas novas classes.
- Aprendemos o conceito de uma classe de serviço, que representa uma funcionalidade ao invés de representar um modelo de nosso domínio.

---

### Aula 5: Interfaces

---

### Aula 6: Métodos mágicos

---

## Professor e aluno

Professor | Aluno
:---:     | :---:
<a href="https://github.com/cviniciussdias" target="_blank" rel="noopener noreferrer"><img width="100" height="100" src="https://github.com/cviniciussdias.png" alt="Foto do professor" title="Foto do professor"></a> | <a href="https://github.com/djonibourscheid" target="_blank" rel="noopener noreferrer"><img width="100" height="100" src="https://github.com/djonibourscheid.png" alt="Foto do aluno" title="Foto do aluno"></a>
Vinicius Dias | Djoni Bourscheid
