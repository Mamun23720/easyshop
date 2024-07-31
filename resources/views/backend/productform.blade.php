@extends('backend.master')



@section('content')

<form action="{{route('backend.storeproduct')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label"><b>Product Name</b></label>
        <input type="name" class="form-control" id="name" placeholder="Enter your product name" name="product_name" required>
      </div>
    <div class="mb-3">
      <label for="price" class="form-label"><b>Product Price</b></label>
      <input type="number" class="form-control" id="price" name="product_price">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label"><b>Product image</b></label>
        <input type="file" class="form-control" id="image" name="product_image">
      </div>
    <div class="mb-3">
        <label for="text" class="form-label"><b>Product Description</b></label>
        <input type="text" class="form-control" id="date" name="product_description">
      </div>
      <label for="text" class="form-label"><b>Product Category</b></label>
      <div class="">
        <select class="form-select" aria-label="Default select example" name="product_category">
            <option selected><b>Product Category</b></option>

            {{-- 1. **Electronics** - Smartphones, laptops, tablets
            3. **Home Appliances** - Refrigerators, washing machines, microwaves
            4. **Furniture** - Sofas, tables, chairs
            5. **Beauty Products** - Skincare, makeup, hair care
            6. **Health & Wellness** - Vitamins, fitness equipment, yoga mats
            8. **Automotive** - Car parts, accessories, tools
            9. **Books** - Fiction, non-fiction, educational
            10. **Toys & Games** - Board games, action figures, puzzles
            11. **Jewelry** - Necklaces, rings, bracelets
            12. **Sports Equipment** - Bicycles, gym equipment, sportswear
            13. **Pet Supplies** - Pet food, toys, grooming products
            14. **Office Supplies** - Printers, stationery, office furniture
            15. **Garden & Outdoor** - Plants, tools, outdoor furniture
            16. **Music & Instruments** - Guitars, headphones, vinyl records
            17. **Travel Accessories** - Luggage, travel pillows, adapters
            18. **Kitchenware** - Cookware, utensils, dinnerware
            19. **Art & Crafts** - Paints, brushes, craft supplies
            20. **Cleaning Supplies** - Detergents, vacuums, cleaning tools --}}

            <option value="Electronics">Electronics</option>

            <option value="Home Appliances">Home Appliances </option>

            <option value="Furniture">Furniture </option>

            <option value="Beauty Products">Beauty Products </option>

            <option value="Health & Wellness">Health & Wellness </option>

            {{-- <option value="6">Automotive </option> --}}

            {{-- <option value="">Books  </option>

            <option value="">Toys & Games </option> --}}

            {{-- <option value="3">Jewelry  </option> --}}

            {{-- <option value="3">Sports Equipment </option> --}}

            {{-- <option value="3">Pet Supplies </option> --}}

            {{-- <option value="3">Office Supplies </option> --}}

            {{-- <option value="3">Garden & Outdoor </option> --}}

            {{-- <option value="3">Music & Instruments </option> --}}

            {{-- <option value="">Travel Accessories </option> --}}

            {{-- <option value="3">Kitchenware </option> --}}

            {{-- <option value="3">Cleaning Supplies </option> --}}

        </select>
      </div>
    {{-- <div class="mb-3">
      <label for="text" class="form-label">Reviews</label>
      <input type="text" class="form-control" id="number" name="customer_number">
    </div> --}}

    <div class="mt-3 mb-3">
    <button type="submit" class="btn btn-primary">Add Product</button>
    </div>
  </form>

  @endsection
