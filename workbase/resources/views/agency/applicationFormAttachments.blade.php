@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Attachments</div>
                    <form method="post" action="{{url('/agency/applicant/saveAttachment')}}" onsubmit="return validateAttachmentForm()"
                          enctype="multipart/form-data">
                        <input type="hidden" name="applicationId" value="{{$applicationId}}">
                        {{csrf_field()}}
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <div class="form-group" id="attachmentGroup">
                                            <input type="file" name="applicant_document" id="attachment" class="form-control">
                                            <span class="help-block" style="display: none" id="attachmentGroupHelpBlock">Please select file to upload</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-3">
                                        <div class="form-group" id="documentTypeGroup">
                                            <label class="control-label">Document Type</label>
                                            <select class="form-control" name="document_type" id="documentType">
                                                <option value="">Select Document Type</option>
                                                @foreach($documentTypes as $documentType)
                                                    <option value="{{$documentType->document_name}}">{{$documentType->document_name}}</option>
                                                @endforeach
                                            </select>
                                            <span class="help-block" style="display: none" id="documentTypeGroupHelpBlock">Please select document type.</span>

                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group" id="otherDocumentTypeGroup">
                                            <label class="control-label">If you select Other Document Type,please
                                                specify</label>
                                            <input type="text" name="other_document_type" class="form-control" id="otherDocumentType">
                                            <span class="help-block" style="display: none" id="otherDocumentTypeGroupHelpBlock">Please select document type.</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-primary">Attach this document</button>
                            <a href="{{url ('/agency/participantListing') }}" class="btn btn-primary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Current Attachments</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Document Type</th>
                                        <th>Other</th>
                                        <th>File Name</th>
                                        <th>Created by</th>
                                        <th>View File</th>
                                        <th>Delete File</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(count($attachments)<=0)
                                        <tr>
                                            <td align="center" colspan="6"><b>No Records Found</b></td>
                                        </tr>
                                    @endif
                                    @foreach($attachments as $attachment)
                                        <tr>
                                            <td>{{$attachment->document_type}}</td>
                                            <td>{{$attachment->other_document_type}}</td>
                                            <td>{{$attachment->attachment_name}}</td>
                                            <td>{{$attachment->created_by}}</td>
                                            <td>
                                                <a href="{{url('/agency/applicant/'.$attachment->id.'/downloadAttachment')}}">View
                                                    File</a></td>
                                            @if(auth()->user()->username == $attachment->created_by)
                                                <td>
                                                    <a href="{{url('/agency/applicant/'.$attachment->id.'/deleteAttachment')}}">Delete
                                                        File</a></td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function validateAttachmentForm() {
            let applicationId = $("#attachment");
            let documentTypeId = $("#documentType");
            let otherDocumentTypeId = $("#otherDocumentType");

            if(applicationId.val()==""){
                $("#attachmentGroup").addClass('has-error');
                $("#attachmentGroupHelpBlock").show();
                return false;
            }else{
                $("#attachmentGroup").removeClass('has-error');
                $("#attachmentGroupHelpBlock").hide();
            }

            if(documentTypeId.val()==""){
                alert('here');
                $("#documentTypeGroup").addClass('has-error');
                $("#documentTypeGroupHelpBlock").show();
                return false;
            }else{
                $("#documentTypeGroup").removeClass('has-error');
                $("#documentTypeGroupHelpBlock").hide();
            }

            if(documentTypeId.val()=="OTHER"){
                if(otherDocumentTypeId.val()==""){
                    $("#otherDocumentTypeGroup").addClass('has-error');
                    $('#otherDocumentTypeGroupHelpBlock').show();
                    return false;
                }else{
                    $("#otherDocumentTypeGroup").removeClass('has-error');
                    $("#otherDocumentTypeGroupHelpBlock").hide();
                }
            }

            return true;

        }
    </script>
@endsection
