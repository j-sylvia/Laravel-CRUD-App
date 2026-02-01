<div class="mb-3">
    <label class="form-label">Title</label>
    <input type="text" name="title" value="{{ old('title', $task->title ?? '') }}" class="form-control">
    @error('title')<div class="text-danger">{{ $message }}</div>@enderror
</div>

<div class="mb-3">
    <label class="form-label">Description</label>
    <textarea name="description" class="form-control" rows="4">{{ old('description', $task->description ?? '') }}</textarea>
    @error('description')<div class="text-danger">{{ $message }}</div>@enderror
</div>
<div class="mb-3">
    <label class="form-label">Due Date</label>
    <input type="date" name="due_date" value="{{ old('due_date', isset($task) ? $task->due_date->format('Y-m-d') : '') }}" class="form-control">
    @error('due_date')<div class="text-danger">{{ $message }}</div>@enderror

</div>

<div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status" class="form-select">
        @php $val = old('status', $task->status ?? 'Pending'); @endphp
        <option value="Pending" {{ $val === 'Pending' ? 'selected' : '' }}>Pending</option>
        <option value="Completed" {{ $val === 'Completed' ? 'selected' : '' }}>Completed</option>
    </select>
    @error('status')<div class="text-danger">{{ $message }}</div>@enderror
</div>
