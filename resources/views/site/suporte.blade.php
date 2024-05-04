@extends('layouts.admin.body')
@section('titulo','Home')

@section('conteudo')
<!-- Modal -->
<div class="modal max-vh-100  " id="myModal" aria-labelledby="exampleModalLabel" data-bs-backdrop="false" style="top: 45%; left: 30%; ">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chat-Suport</h5>
                 
                    <svg xmlns="http://www.w3.org/2000/svg" aria-label="Close" width="18" height="18" data-bs-dismiss="modal"  fill="currentColor" class="bi bi-x-lg btn-close" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                    </svg>
            </div>
            <div class="modal-body">
               
            </div>
            <div class="modal-footer">
                <form action="{{route('chat_create')}}" method="post" class="d-flex">
               @csrf
                <textarea name="text" id="chat" style="width: 400px;"></textarea>
                    <button type="submit" class="btn btn-primary ml-1 "><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                            <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471z" />
                        </svg></button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="fixed-element d-inline-block" style="position: fixed; bottom: 20px; right: 20px;">
    <button type="button" class="btn btn-primary" id="openModalBtn" style="margin-top: 38%;">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-chat-right-dots" viewBox="0 0 16 16">
            <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z" />
            <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0" />
        </svg>
    </button>
</div>

<div>

    <br><br><br>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam tempore eaque dolores reiciendis, nisi eius beatae corporis amet illo, architecto dolorem doloremque, esse optio debitis minus unde quidem dignissimos veniam!</p>
    <input type="text" id="otherInput" class="form-control" placeholder="Outro campo de entrada">
    <input type="text">
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const openModalBtn = document.getElementById('openModalBtn');
        const modal = document.getElementById('myModal');
        const modalInput = document.getElementById('modalInput');
        const otherInput = document.getElementById('otherInput');
        const saveChangesBtn = document.getElementById('saveChangesBtn');

        openModalBtn.addEventListener('click', function() {
            var myModal = new bootstrap.Modal(modal);
            myModal.show();
        });

        saveChangesBtn.addEventListener('click', function() {
            otherInput.value = modalInput.value;
            modal.classList.add('position-fixed');
            var myModal = new bootstrap.Modal(modal);
            myModal.hide();
        });

        modal.addEventListener('hidden.bs.modal', function() {
            modal.classList.remove('position-fixed');
        });
    });
</script>
@endsection