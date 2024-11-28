import React from 'react'

const DeleteButton = () => {

    const handleDelete = () => {
        fetch(`http://127.0.0.1:8000/api/projects/${id}`, {
            method: 'DELETE',
        })
    }

  return (
    <div>
      
    </div>
  )
}

export default DeleteButton
