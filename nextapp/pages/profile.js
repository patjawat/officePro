import Link from "next/link";
import React, { useState, useEffect } from "react";
import BackendLayout from "../layouts/BackendLayout";
import UploadService from "../services/FileUploadService";
import axios from '../axios.config';
import { useForm } from "react-hook-form";



export default function Profile() {

  const [image, setImage] = useState({ preview: "", raw: "" });
  const [files, setfiles] = useState(null);

  const selectFile = (event) => {
    setSelectedFiles(event.target.files);
    console.log(event)
  };
  const handleChange = e => {
    if (e.target.files.length) {
      setImage({
        preview: URL.createObjectURL(e.target.files[0]),
        raw: e.target.files[0]
      });
      setfiles(e.target.files[0]);
      // console.log(e.target.files[0])
    }
  };

  const handleUpload = async (e) => {
    e.preventDefault()
    const formData = new FormData()
    formData.append('image', image.raw)
    const config = { headers: 
     {'content-type': 'multipart/form-data'} 
    }
    // await uploadToBackend('endpoint', {image: image.raw}, config)
    const data = await axios.post('store-file', {image: image.raw});
    // console.log(data);
   }
    


  return (
    <>

 <label htmlFor="upload-button">
        {image.preview ? (
          <img src={image.preview} alt="dummy" width="300" height="300" />
        ) : (
          <>
            <span className="fa-stack fa-2x mt-3 mb-2">
              <i className="fas fa-circle fa-stack-2x" />
              <i className="fas fa-store fa-stack-1x fa-inverse" />
            </span>
            <h5 className="text-center">Upload your photo</h5>
          </>
        )}
      </label>
      <input
        type="file"
        id="upload-button"
        style={{ display: "none" }}
        onChange={handleChange}
      />
      <br />
      <button onClick={handleUpload}>Upload</button>
      <hr/>
      {JSON.stringify(files)}


    </>
  );
}

Profile.Layout = BackendLayout;