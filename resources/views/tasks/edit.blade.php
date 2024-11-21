@extends("layouts/structure")

@section("title", "Modifier une tâche")

@section("main_content")

<section>
    <form class='form' action="/tasks/edit/{{$task->id}}" method="POST">
        @csrf
        <h1>Modifier la tâche</h1>
        <input type="text" name="title" placeholder="titre de votre tâche" value="{{$task->title}}">
        <textarea type="text" name="description" placeholder="Description">{{$task->description}}</textarea>
        
        <label for="priority">Priorité :</label>
        <select name="priority">
            <option value="1" {{ $task->priority == 1 ? 'selected' : '' }}>1</option>
            <option value="2" {{ $task->priority == 2 ? 'selected' : '' }}>2</option>
            <option value="3" {{ $task->priority == 3 ? 'selected' : '' }}>3</option>
        </select>
        
        <label for="due_date">Date d'échéance :</label>
        <input type="date" name="due_date" value="{{$task->due_date}}">
        
        <label for="status">Statut :</label>
        <select name="status">
            <option value="1" {{ $task->status == 1 ? 'selected' : '' }}>Ouverte</option>
            <option value="0" {{ $task->status == 0 ? 'selected' : '' }}>Terminé</option>
        </select>
        
        <button type="submit">Modifier la tâche</button>
        <a class="center" href='/tasks'>Revenir aux tâches</a>
    </form>
    
</section>
    
@endsection
