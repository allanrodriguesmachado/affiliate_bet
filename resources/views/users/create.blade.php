<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="border-b border-gray-900/10 pb-12">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">Dashboard</div>
                                        <div class="card-body">
                                            <a class="text-success" href="{{route('user.index')}}">&leftarrow; Voltar para a listagem</a>

                                            @if($errors)
                                                @foreach($errors->all() as $error)
                                                    <div class="alert text-red-700 alert-danger mt-4" role="alert">
                                                        {{ $error }}
                                                    </div>
                                                @endforeach
                                            @endif

                                            <form action="{{route('user.store')}}" method="post" class="mt-4" autocomplete="off">
                                                @csrf

                                                <div class="form-group">
                                                    <label for="name">Password</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Insira o RECURSO"
                                                           name="name" value="{{ old('name') }}">


                                                    <label for="email">Password</label>
                                                    <input type="email" class="form-control" id="email" placeholder="Insira o RECURSO"
                                                           name="email" value="{{ old('email') }}">

                                                    <label for="password">password</label>
                                                    <input type="password" class="form-control" id="password" placeholder="Insira o RECURSO"
                                                           name="password" value="{{ old('password') }}">
                                                </div>

                                                <button type="submit" class="btn btn-block btn-success">Cadastrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>


