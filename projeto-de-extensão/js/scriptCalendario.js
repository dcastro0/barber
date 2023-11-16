document.addEventListener("DOMContentLoaded", function () {
    const dias = document.getElementById("dias");
    const mesLabel = document.getElementById("mes");
    const anoLabel = document.getElementById("ano");
    const btnAnt = document.getElementById("btn_ant");
    const btnPro = document.getElementById("btn_pro");

    let dataAtual = new Date();
    let ano = dataAtual.getFullYear();
    let mes = dataAtual.getMonth();

    function exibirCalendario(mes, ano) {
        const primeiroDia = new Date(ano, mes, 1);
        const ultimoDia = new Date(ano, mes + 1, 0);

        mesLabel.textContent = primeiroDia.toLocaleString("pt-br", { month: "long" });
        anoLabel.textContent = ano;

        let diaAtual = new Date();

        let html = "";

        for (let i = 0; i < primeiroDia.getDay(); i++) {
            html += "<td></td>";
        }

        for (let dia = 1; dia <= ultimoDia.getDate(); dia++) {
            if (
                dia === diaAtual.getDate() &&
                mes === diaAtual.getMonth() &&
                ano === diaAtual.getFullYear()
            ) {
                html += `<td class="dia-atual" onclick="diaSelecionado(${dia}, ${mes}, ${ano})"><a href='horarios.html'>${dia}</a></td>`;
            } else {
                html += `<td><a href='horarios.html' onclick="diaSelecionado(${dia}, ${mes}, ${ano})">${dia}</a></td>`;
            }

            if (primeiroDia.getDay() === 6) {
                html += "</tr>";
                if (dia < ultimoDia.getDate()) {
                    html += "<tr>";
                }
            }

            primeiroDia.setDate(primeiroDia.getDate() + 1);
        }

        dias.innerHTML = html;
    }

    exibirCalendario(mes, ano);


    btnAnt.addEventListener("click", function () {
        mes--;
        if (mes < 0) {
            mes = 11;
            ano--;
        }
        exibirCalendario(mes, ano);
        
    });

    btnPro.addEventListener("click", function () {
        mes++;
        if (mes > 11) {
            mes = 0;
            ano++;
        }
        exibirCalendario(mes, ano);

    });
});