const form = document.getElementById("formAluno");

const id = document.getElementById("id");
const nome = document.getElementById("nome");
const email = document.getElementById("email");

const lista = document.getElementById("lista");

carregarAlunos();

form.addEventListener("submit", async function (e) {

    e.preventDefault();

    if (nome.value.trim() === "") {

        alert("Informe o nome");
        return;

    }

    if (email.value.trim() === "") {

        alert("Informe o email");
        return;

    }

    let url = "inserir.php";

    if (id.value !== "") {

        url = "atualizar.php";

    }

    const dados = new FormData();

    dados.append("id", id.value);
    dados.append("nome", nome.value);
    dados.append("email", email.value);

    await fetch(url, {
        method: "POST",
        body: dados
    });

    form.reset();

    id.value = "";

    carregarAlunos();

});

async function carregarAlunos() {

    const resposta = await fetch("listar.php");

    const alunos = await resposta.json();

    let html = "";

    alunos.forEach(aluno => {

        html += `
            <p>
                ${aluno.nome}
                (${aluno.email})

                <button onclick="editar(${aluno.id})">
                    Editar
                </button>

                <button onclick="excluir(${aluno.id})">
                    Excluir
                </button>
            </p>
        `;

    });

    lista.innerHTML = html;

}

async function editar(codigo) {

    const resposta =
        await fetch("buscar.php?id=" + codigo);

    const aluno =
        await resposta.json();

    id.value = aluno.id;
    nome.value = aluno.nome;
    email.value = aluno.email;

}

async function excluir(codigo) {

    if (!confirm("Deseja excluir?")) {
        return;
    }

    const dados = new FormData();

    dados.append("id", codigo);

    await fetch(
        "excluir.php",
        {
            method: "POST",
            body: dados
        }
    );

    carregarAlunos();

}