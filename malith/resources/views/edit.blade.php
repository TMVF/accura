@extends('create')

@section('editFname',$item->fname)
@section('editLname',$item->lname)
@section('editArea',$item->area)
@section('editDs',$item->ds)
@section('editDob',$item->dob)

@section('editId',$item->id)

@section('editMethod')
  {{method_field('PUT')}}
@endsection