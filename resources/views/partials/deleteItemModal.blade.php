
<section id="deleteItemSection">
<div class="modal fade" id="deleteItemModal_{{$item['item_id']}}" data-id="{{$item['item_id']}}" tabindex="-1" aria-labelledby="deleteItemModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-3 zoom">
                        <a class="item-card z" href={{"/item/" . $item["item_id"]}}>
                            <img src={{$item->photos->sortBy('photo_id')[0]["path"]}} class="card-img-top mx-auto d-flex" id="searchResultItemImage" alt={{$item["name"]}}>
                        </a>
                    </div>
                    <div class="col-lg-9 col-12">
                        <div class="row">
                            <div class="col-lg-6 col-12 ps-lg-3 ps-3">
                                <div class="itemTitle text-lg-start text-center">
                                    <h4 class="title col-12 d-flex flex-column justify-content-center">
                                        <a class="link-dark fs-5" href={{"./item/" . $item["item_id"]}}>
                                            {{$item["name"]}}
                                        </a>
                                    </h4>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12 d-flex flex-column justify-content-center">
                                <div class="h-50 align-items-center mt-lg-0 mt-2 text-center">
                                    <span>
                                        {{-- TODO: check for discounts --}}
                                        <span class="title fs-3 itemPrice" id="deleteCartModalPrice" style="color:#e3203e">{{ $item["price"] }}</span>
                                        {{-- <small class="align-top itemPreviousPriceDiscount">    <--- original price
                                            <span class="title text-decoration-line-through">360€</span>
                                        </small> --}}
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center my-1" > Are you sure you want to delete? </div>
                <button type="button" onclick="deleteItem({{$item["item_id"]}})" id="deleteItemButton" class="btn btn-secondary close_modals w-100" data-bs-dismiss="modal">Yes</button>
            </div> 
        </div>
    </div>
</div>
<button type="button" class="btn btn-dark w-100 btn-lg rounded-bottom rounded-0" data-bs-toggle="modal" data-bs-target="#deleteItemModal_{{$item['item_id']}}">
    <i class="bi bi-trash-fill"></i> Delete item
</button>
</section>