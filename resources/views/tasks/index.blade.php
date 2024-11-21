@extends("layouts/structure")

@section("title", "Tableau de bord")

@section("main_content")
    <section>
        <h1>Tableau de bord</h1>
        <br>
        <a href='/tasks/create'>Ajouter une nouvelle tâche</a>

        <div id="tasks-container">
            @foreach ($tasks as $task)
                <div class="task">
                    <h1>{{$task->title}}</h1>
                    <p>{{$task->description}}</p>
                    <hr>
                    <p>Priorité : {{$task->priority}}</p>
                    <p>Date d'échéance : {{$task->due_date}}</p>
                    
                    <form action="/tasks/showEditForm/{{$task->id}}" method="POST">
                        @csrf
                        <button type="submit">Modifier</button>
                    </form> 
                    <br>
                    <form action="/tasks/delete/{{$task->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>   
                </div>
            @endforeach
        </div>
    </section>
    
@endsection
