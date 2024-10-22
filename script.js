document.addEventListener("DOMContentLoaded", function () {
  const taskForm = document.getElementById("task-form");
  const taskList = document.getElementById("task-list");

  function loadTasks() {
    fetch("backend/crud.php")
      .then((response) => response.json())
      .then((data) => {
        taskList.innerHTML = "";
        data.forEach((task) => {
          const taskItem = document.createElement("li");
          taskItem.classList.add("list-group-item");
          taskItem.innerHTML = `
                        <div class="d-flex justify-content-between">
                            <div>
                                <strong>${task.titulo}</strong> - ${
            task.descricao || "Sem descrição"
          }
                            </div>
                            <div>
                                <button class="btn btn-sm btn-success">Concluir</button>
                                <button class="btn btn-sm btn-warning">Editar</button>
                                <button class="btn btn-sm btn-danger">Deletar</button>
                            </div>
                        </div>
                    `;
          taskList.appendChild(taskItem);
        });
      });
  }

  taskForm.addEventListener("submit", function (e) {
    e.preventDefault();
    const titulo = document.getElementById("titulo").value;
    const descricao = document.getElementById("descricao").value;

    fetch("backend/crud.php", {
      method: "POST",
      headers: { "Content-Type": "application/x-www-form-urlencoded" },
      body: `titulo=${titulo}&descricao=${descricao}`,
    }).then(() => loadTasks());
  });

  loadTasks();
});