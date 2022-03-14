@extends('layouts.admin')
    @section('title')
        <title>Document</title>
    @endsection
    @section('header-links')
        <link rel="stylesheet" href="{{ asset('assets/css/floor-plan/create-floor-plan.css') }}">
    @endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-purple card-header-icon">
                            <h4 class="card-title">Edit floor plan</h4>
                        </div>
                        <div class="card ">
                            <div class="card-header card-header-primary card-header-text">
                              <div class="card-text">
                                <h4 class="card-title">Edit Floor Plan</h4>
                              </div>
                            </div>
                            {{-- --------form-------------- --}}
                            <form class="mt-5 send" enctype="multipart/form-data">
                                @csrf
                            <div class="card-body ">
                                <div class="row d-flex flex-wrap card-cont">
                                    <div class="w-50">
                                        <div class="tbl-div" style="background:url({{ asset('assets/images-background-floor-plane/'.$floor_plan[0]->background_img.'') }}); background-size: cover">
                                            {{-- ---------table from database-------------------------------- --}}
                                            <table id="table" class="tbl">
                                                @for ($i = 1; $i <=$floor_plan[0]->table_y; $i++)
                                                    <tr class= 'some-class'>
                                                        @for ($j = 1; $j <=$floor_plan[0]->table_x; $j++)
                                                            <td class= 'some-td ui-droppable' data-x={{$j}} data-y={{$i}}
                                                                 style="width: {{500/$floor_plan[0]->table_x}}px; height: {{500/$floor_plan[0]->table_y}}px">
                                                                @foreach ($floor_plan as $item)
                                                                    @if ($i==json_decode($item->data_json)->y && $j==json_decode($item->data_json)->x)
                                                                       <div class="ui-widget-content ui-corner-tr mr-4 ui-draggable ui-draggable-handle">
                                                                            <div class="w-100 text-right x px-3">x</div>
                                                                            <img src="{{ asset('assets/images-tables/'.json_decode($item->data_json)->img.'') }}" class="img-table" data-name="{{json_decode($item->data_json)->img}}">
                                                                            <input class="form-control quantity-chair text-center" type="number" name="mm-2" placeholder="quantity chair" required="true" aria-required="true" aria-invalid="true"
                                                                                   value="{{json_decode($item->data_json)->quantity_chair}}">
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            </td>
                                                        @endfor
                                                    </tr>
                                                @endfor
                                            </table>
                                        </div>
                                    </div>
                                    <div class="w-50">
                            {{-- ------------------form group for upload_img----------------------- --}}
                                        <div class="form-group bmd-form-group has-danger">
                                                <label class=" d-flex align-items-center " for="imageUpload"><span> floor plan image</span><span class="material-icons" >
                                                   upload_file
                                                    </span>
                                                </label>
                                            <input class="form-control img" id="imageUpload" type="file" name="img" >
                                        </div>
                                        <div class="d-flex">
                                            {{-- ---------table x--------------------- --}}
                                            <div class="form-group mr-3 bmd-form-group ">
                                                <label class=" bmd-label-floating ">width</label>
                                                <input class="form-control width xy" type="number" name="table_x" required="true" aria-required="true" aria-invalid="true"
                                                  value="{{$floor_plan[0]->table_x}}">
                                            </div>
                                            {{-- ------------table y---------------------- --}}
                                            <div class="form-group mr-3 bmd-form-group ">
                                                <label class="bmd-label-floating ">Height</label>
                                                <input class="form-control height xy" type="number" name="table_y" required="true" aria-required="true" aria-invalid="true"
                                                  value="{{$floor_plan[0]->table_y}}">
                                            </div>
                                            <div>
                                                <div class="create-tbl btn btn-primary">create froor plane</div>
                                            </div>
                                        </div>
                             {{-- ----------------------tables images-------------------------------- --}}
                                        <div id="gallery" class=" my-5 d-flex flex-wrap gallery ui-helper-reset ui-helper-clearfix">
                                            <div class="ui-widget-content ui-corner-tr mr-4 ">
                                                <img src={{ asset('assets/images-tables/3.png')}} class="img-table" data-name='3.png'>
                                            </div>
                                            <div class="ui-widget-content ui-corner-tr mr-4">
                                                <img src={{ asset('assets/images-tables/4.png')}} class="img-table" data-name='4.png'>
                                            </div>
                                            <div class="ui-widget-content ui-corner-tr mr-4">
                                                <img src={{ asset('assets/images-tables/6.png')}} class="img-table" data-name='6.png'>
                                            </div>
                                            <div class="ui-widget-content ui-corner-tr mr-4">
                                                <img src={{ asset('assets/images-tables/8.png')}} class="img-table" data-name='8.png'>
                                            </div>
                                        </div>
                                        {{-- -----------Hall name---------------- --}}
                                        <div class="form-group mr-3 bmd-form-group mt-5">
                                            <label class=" bmd-label-floating">Hall name</label>
                                            <input class="form-control hall-name" type="text" name="hall_name" required="true" aria-required="true" aria-invalid="true"
                                             value="{{$floor_plan[0]->hall_name}}">
                                        </div>
                                    </div>
                                </div>
                              <div class="row">
                                <div class="col-sm-12">
                                    {{-- ------------description----------------------- --}}
                                    <div class="form-group mr-3 bmd-form-group mt-5">
                                        <label class=" bmd-label-floating">Description</label>
                                        <textarea class="form-control desc"  name="description" required="true" aria-required="true" aria-invalid="true">
                                            {{$floor_plan[0]->description}}
                                        </textarea>
                                    </div>
                                </div>
                                </div>
                              </div>
                              {{-- ----------card footer---------------- --}}
                            <div class="card-footer ml-auto mr-auto ">
                                <div class="message mt-2 mx-5"></div>
                                <input type="hidden" value="9" name="restaurnt_id" id="restaurant_id">
                                <input type="hidden" name="arr_tbl" value="" id="arr-tbl">
                                <input type="hidden" name="hidden_url" value="update_floor_plan" id="hidden-url">
                                <input type="hidden" name="hidden_background_url" value="{{$floor_plan[0]->background_img}}">
                                <input type="submit" name="" value="Edit floor plane" class=" btn btn-primary">
                            </div>
                        </form>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ asset('assets/js/floor-plan/drag-drop.js') }}"></script>
<script src="{{ asset('assets/js/floor-plan/edit.js') }}"></script>
<script src="{{ asset('assets/js/floor-plan/script.js') }}"></script>

@endsection
