<div>
    @if ($window === 'create')
        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Student Account</h3>
        </div>
        <div class="row dashboardContainer ps-4 pb-4">
            <div class="row mt-4">
                <div class="col-4">

                    <h2 class="fw-bold">Student Account Creation</h2>

                </div>
                <div class="col"></div>
                <div class="col-3 d-flex justify-content-end">
                    <button wire:click='edit' type="button" class="pt-2 me-3 col-8 btn btn-primary">
                        Search & Update
                    </button>
                </div>
            </div>
            <form wire:submit.prevent="create">
                @csrf
                <div class="row mt-3">
                    <div class="col-2">

                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Course</h6>
                            <select wire:model="selectedCourse" class="form-select p-2"
                                aria-label="Default select example">
                                <option value="0" selected>Course</option>
                                @foreach ($courses as $course)
                                    <option class="option" value="{{ $course->id }}">
                                        <a class="dropdown-item" href="#">{{ $course->name }}
                                            ({{ $course->abbreviation }})
                                        </a>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Section</h6>
                            <select wire:model="selectedSection" class="form-select p-2"
                                aria-label="Default select example">
                                <option value="0" selected>Section</option>
                                @if (!is_null($selectedCourse))
                                    @foreach ($sections as $section)
                                        <option class="option" value="{{ $section->id }}">
                                            <a class="dropdown-item" href="#">{{ $section->name }}
                                                ({{ $section->description }})
                                            </a>
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentLastName" type="text" id="" class="form-control" />
                            <label class="form-label" for="">Last Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentMiddleName" type="text" id="" class="form-control" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentFirstName" type="text" id="" class="form-control" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentSuffixName" type="text" id="" class="form-control" />
                            <label class="form-label" for="">Pre/Suffix</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col text-center pt-2">
                        <div class="form-check form-check-inline">
                            <input wire:model="studentGender" class="form-check-input" type="radio" id="inlineRadio1"
                                value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input wire:model="studentGender" class="form-check-input" type="radio" id="inlineRadio2"
                                value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentNationality" type="text" id="" class="form-control" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                    </div>
                    <div class="col-1 text-end pt-2">
                        <h5>Birthdate:</h5>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentBirthdate" type="date" id=""
                                class="form-control" />
                            <label class="form-label" for=""></label>
                        </div>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentContactNumber" type="text" id=""
                                class="form-control" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentEmail" type="email" id="" class="form-control" />
                            <label class="form-label" for="">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="studentAddress" type="text" id="" class="form-control" />
                            <label class="form-label" for="">Address</label>
                        </div>
                    </div>


                </div>
        </div>

        <div class="row dashboardContainer ps-4 pb-4 pe-4">
            <div class="row mt-4">
                <div class="col-3 " type="button">
                    {{-- data-mdb-toggle="collapse" data-mdb-target="#accord" --}}
                    <h2 class="fw-bold text-muted">Contact Person</h2>
                </div>
            </div>
            {{-- accordion-collapse collapse --}}
            <div class="" id="accord">
                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input wire:model="contactLastName" type="text" id="" class="form-control"
                                wire:model="contactLastName" />
                            <label class="form-label" for="">Last Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactMiddleName" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactFirstName" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactSuffixName" />
                            <label class="form-label" for="">Pre/Suffix</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col text-center pt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" wire:model="contactGender"
                                id="inlineRadio1" value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" wire:model="contactGender"
                                id="inlineRadio2" value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactNationality" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactRelationship" />
                            <label class="form-label" for="">Relationship</label>
                        </div>
                    </div>
                </div>



                <div class="row mt-4">
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="contactContactNumber" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control" wire:model="contactEmail" />
                            <label class="form-label" for="">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="contactAddress" />
                            <label class="form-label" for="">Address</label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4 d-flex justify-content-end">
                    <button class="p-2 me-3 col-3 btn btn-primary">
                        Create Student Account
                    </button>
                </div>

            </div>
            </form>

        </div>
    @else
        {{-- ----------------------------- else edit----------------------------------- --}}



        <div class="row dashboardTitleContainer ps-4 rounded-top">
            <h3 class="fw-bold pt-2">Find Student Account</h3>
        </div>
        <form>
            @csrf
            <div class="row dashboardContainer ps-4 pb-4">
                <div class="row mt-4">
                    <div class="col-3">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">Select Student</h6>
                            {{-- wire:model="selectedStudent" --}}
                            <select wire:model="selectedStudent" class="form-select p-2"
                                aria-label="Default select example">
                                <option value="0" selected>Student id</option>
                                @foreach ($students as $student)
                                    <option class="option" value="{{ $student->id }}">
                                        <a class="dropdown-item" href="#">{{ $student->id }}:
                                            {{ $student->last_name }}, ({{ $student->first_name }})
                                            ({{ $student->first_name }})
                                        </a>
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col-3 d-flex justify-content-end">
                        <button wire:click='back' type="button" class="pt-2 me-3 col-8 btn btn-primary">
                            Back
                        </button>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">New Course</h6>
                            <select wire:model="selectedCourse" class="form-select p-2" aria-label="Default select example">
                                <option value="" selected>No changes</option>
                                @if (!is_null($selectedStudent))

                                    @foreach ($courses as $course)
                                        <option class="option" value="{{ $course->id }}">
                                            <a class="dropdown-item" href="#">
                                                {{ $course->name }}
                                            </a>
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="dropdown">
                            <h6 class="text-muted text-left ps-1">New Section</h6>
                            <select class="form-select p-2" aria-label="Default select example">
                                <option value="" selected>No changes</option>
                                @if (!is_null($selectedCourse))
                                @foreach ($sections as $section)
                                    <option class="option" value="{{ $section->id }}">
                                        <a class="dropdown-item" href="#">{{ $section->name }}
                                            ({{ $section->description }})
                                        </a>
                                    </option>
                                @endforeach
                            @endif
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            @if (!is_null($selectedStudent))
                                @foreach ($student_data as $student)
                                    <input type="text" id="lname" class="form-control"
                                        value="{{ $student->last_name }}" />
                                    <label class="form-label" for="">Last Name </label>
                                @endforeach
                            @else
                                <input type="text" id="" class="form-control" value="" />
                                <label class="form-label" for="">Last Name </label>
                            @endif

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentMiddleName" />
                            <label class="form-label" for="">Middle Name</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentFirstName" />
                            <label class="form-label" for="">First Name</label>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentSuffixName" />
                            <label class="form-label" for="">Pre/Suffix</label>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <hr class="hr my-4">
                </div>
                <div class="row">
                    <div class="col text-center pt-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" wire:model="studentGender"
                                id="inlineRadio1" value="male" />
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" wire:model="studentGender"
                                id="inlineRadio2" value="female" />
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentNationality" />
                            <label class="form-label" for="">Nationality</label>
                        </div>
                    </div>
                    <div class="col-1 text-end pt-2">
                        <h5>Birthdate:</h5>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="date" id="" class="form-control"
                                wire:model="studentBirthdate" />
                            <label class="form-label" for=""></label>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-2">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control"
                                wire:model="studentContactNumber" />
                            <label class="form-label" for="">Contact Number</label>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="email" id="" class="form-control" wire:model="studentEmail" />
                            <label class="form-label" for="">Email</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline bg-white rounded p-1">
                            <input type="text" id="" class="form-control" wire:model="studentAddress" />
                            <label class="form-label" for="">Address</label>
                        </div>
                    </div>


                </div>
            </div>

            <div class="row dashboardContainer ps-4 pb-4 pe-4">
                <div class="row mt-4">
                    <div class="col-3" type="button">
                        <h2 class="fw-bold text-muted">Contact Person </h2>
                    </div>
                </div>
                <div class="" id="accord2">
                    <div class="row mt-4">
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactLastName" />
                                <label class="form-label" for="">Last Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactMiddleName" />
                                <label class="form-label" for="">Middle Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactFirstName" />
                                <label class="form-label" for="">First Name</label>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactSuffixName" />
                                <label class="form-label" for="">Pre/Suffix</label>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <hr class="hr my-4">
                    </div>
                    <div class="row">
                        <div class="col text-center pt-2">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" wire:model="contactGender"
                                    id="inlineRadio1" value="male" />
                                <label class="form-check-label" for="inlineRadio1">Male</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" wire:model="contactGender"
                                    id="inlineRadio2" value="female" />
                                <label class="form-check-label" for="inlineRadio2">Female</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactNationality" />
                                <label class="form-label" for="">Nationality</label>
                            </div>
                        </div>

                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactRelationship" />
                                <label class="form-label" for="">Relationship</label>
                            </div>
                        </div>
                    </div>



                    <div class="row my-4">
                        <div class="col-2">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactContactNumber" />
                                <label class="form-label" for="">Contact Number</label>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="email" id="" class="form-control"
                                    wire:model="contactEmail" />
                                <label class="form-label" for="">Email</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline bg-white rounded p-1">
                                <input type="text" id="" class="form-control"
                                    wire:model="contactAddress" />
                                <label class="form-label" for="">Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-end">
                        <button class="p-2 me-3 col-2 btn btn-primary">
                            Archive Account
                        </button>
                        <button wire:click="edit" class="p-2 me-3 col-1 btn btn-primary">
                            Update
                        </button>
                    </div>
                </div>
            </div>
        </form>
    @endif
</div>
