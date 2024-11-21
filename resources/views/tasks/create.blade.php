@extends("layouts/structure")

@section("title", "Nouvelle tâche")

@section("main_content")

<section>
    <form class='form' action="/tasks/create" method="POST">
        @csrf
        <h1>Nouvelle tâche</h1>
        <input type="text" name="title" placeholder="titre de votre tâche">
        <textarea type="text" name="description" placeholder="Description"></textarea>
        <label for="priority">Priorité :</label>
        <select name="priority">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <label for="due_date">Date d'échéance :</label>
        <input type="date" name="due_date">
        <button type="submit">Ajouter la tâches</button> 
        <a class="center" href='/tasks'>Revenir aux tâches</a>
    </form>
    
</section>
    
@endsection
