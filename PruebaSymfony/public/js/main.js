const empresa = document.getElementById('empresa');

if (articles) {
  articles.addEventListener('click', e => {
    if (e.target.className === 'btn btn-danger btn-eliminar') {
      if (confirm('Are you sure?')) {
        const id = e.target.getAttribute('data-id');

        fetch(`/empresa/borrar/${id}`, {
          method: 'DELETE'
        }).then(res => window.location.reload());
      }
    }
  });
}