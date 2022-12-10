@if ($data->deleted_at)
     <button class="btn btn-sm btn-icon waves-effect waves-light btn-primary active" data-id="{{ enkrip($data->id) }}"><i class="fas fa-upload"></i></button>
@else
     <a href="{{ route('school-year.edit',enkrip($data->id)) }}" class="btn btn-sm btn-icon waves-effect waves-light btn-success"><i class="fa fa-edit"></i></a>
@endif