@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
      Пользователи
            </div>
            <div class="card-body">
              <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ф.И.О</th>
      <th scope="col">Должность</th>
      <th scope="col"class="text-right">Действие</th>
    </tr>
  </thead>
  <tbody>
    @forelse($items as $item)
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td>{{ $item->name }}</td>
      <td>{{ $item->position }}</td>
      <td>
          {{-- Кнопки действий--}}
        </td>
      </tr>
    @empty
        <tr>
          <td colspan="4" class="text-center">
            Нет пользователей
          </td>
        </tr>
    @endforelse
    </tbody>
  </table>
          </div>
        </div>
      </div>
  </div>
  </div>

    @endsection
