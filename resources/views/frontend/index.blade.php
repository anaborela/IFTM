@extends('layouts.web')

@section('content')
<section>
    <div class="px-4 py-5 my-5 text-center">
        <div class="col-lg-5 mx-auto">
            <form action="">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="name" name="name" placeholder="João da Silva">
                    <label for="name">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <div class="form-floating">
                        <select class="form-select" id="marathonCategory" name="marathonCategory">
                            <option selected>Selecionar</option>
                            <option value="1">Categoria</option>
                            <option value="2">Categoria</option>
                            <option value="3">Categoria</option>
                        </select>
                        <label for="marathonCategory">Categoria da maratona</label>
                    </div>
                </div>
                <button class="btn btn-outline-success px-5" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</section>
@endsection