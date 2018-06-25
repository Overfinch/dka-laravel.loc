
<div class="form-group">
<label for="published_field">Статус</label>
<select name="published" id="published_field" class="form-control">
    @if(isset($category->id))
        <option value="0" @if($category->published == 0) selected="" @endif> Не опубликовано </option>
        <option value="0" @if($category->published == 1) selected="" @endif> Опубликовано </option>
    @else
        <option value="0"> Не опубликовано </option>
        <option value="0"> Опубликовано </option>
    @endif
</select>
</div>

<div class="form-group">
<label for="">Наименование</label>
<input type="text" name="title" id="" class="form-control" value="{{$category->title or ""}}" required>
</div>


<div class="form-group">
    <label for="">Slug</label>
    <input type="text" name="slug" id="" class="form-control" value="{{$category->slug or ""}}" readonly>
</div>

<div class="form-group">
    <label for="">Родительская категория</label>
    <select name="parent_id">
        <option value="0">-- Без родительской категории --</option>

        @include('admin.categories.partials.categories', ['categories' => $categories])
    </select>
</div>

<hr>

<input type="submit" value="Сохранить" class="btn btn-primary">











