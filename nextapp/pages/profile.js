import Link from "next/link";
import React, { useState, useEffect } from "react";
import Theme from "../layouts/bootstrap4/theme1";
import UploadService from "../services/FileUploadService";
import axios from '../axios.config';
import { useForm } from "react-hook-form";

import ViewProfile from "../components/profiles/viewProfile"
import JobList from "../components/profiles/jobList"

export default function Profile() {

  const [image, setImage] = useState({ preview: "", raw: "" });
  const [files, setfiles] = useState(null);

  return (
    <>
      <div className="row">
        <div className="col-3 p-3">
          <ViewProfile />
        </div>
        <div className="col-9 p-3">
<JobList />
        </div>
      </div>

    </>
  );
}

Profile.Layout = Theme;